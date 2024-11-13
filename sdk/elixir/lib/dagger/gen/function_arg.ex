# This file generated by `dagger_codegen`. Please DO NOT EDIT.
defmodule Dagger.FunctionArg do
  @moduledoc """
  An argument accepted by a function.

  This is a specification for an argument at function definition time, not an argument passed at function call time.
  """

  alias Dagger.Core.Client
  alias Dagger.Core.QueryBuilder, as: QB

  @derive Dagger.ID

  defstruct [:query_builder, :client]

  @type t() :: %__MODULE__{}

  @doc "Only applies to arguments of type File or Directory. If the argument is not set, load it from the given path in the context directory"
  @spec default_path(t()) :: {:ok, String.t()} | {:error, term()}
  def default_path(%__MODULE__{} = function_arg) do
    query_builder =
      function_arg.query_builder |> QB.select("defaultPath")

    Client.execute(function_arg.client, query_builder)
  end

  @doc "A default value to use for this argument when not explicitly set by the caller, if any."
  @spec default_value(t()) :: {:ok, Dagger.JSON.t()} | {:error, term()}
  def default_value(%__MODULE__{} = function_arg) do
    query_builder =
      function_arg.query_builder |> QB.select("defaultValue")

    Client.execute(function_arg.client, query_builder)
  end

  @doc "A doc string for the argument, if any."
  @spec description(t()) :: {:ok, String.t()} | {:error, term()}
  def description(%__MODULE__{} = function_arg) do
    query_builder =
      function_arg.query_builder |> QB.select("description")

    Client.execute(function_arg.client, query_builder)
  end

  @doc "A unique identifier for this FunctionArg."
  @spec id(t()) :: {:ok, Dagger.FunctionArgID.t()} | {:error, term()}
  def id(%__MODULE__{} = function_arg) do
    query_builder =
      function_arg.query_builder |> QB.select("id")

    Client.execute(function_arg.client, query_builder)
  end

  @doc "Only applies to arguments of type Directory. The ignore patterns are applied to the input directory, and matching entries are filtered out, in a cache-efficient manner."
  @spec ignore(t()) :: {:ok, [String.t()]} | {:error, term()}
  def ignore(%__MODULE__{} = function_arg) do
    query_builder =
      function_arg.query_builder |> QB.select("ignore")

    Client.execute(function_arg.client, query_builder)
  end

  @doc "The name of the argument in lowerCamelCase format."
  @spec name(t()) :: {:ok, String.t()} | {:error, term()}
  def name(%__MODULE__{} = function_arg) do
    query_builder =
      function_arg.query_builder |> QB.select("name")

    Client.execute(function_arg.client, query_builder)
  end

  @doc "The location of this arg declaration."
  @spec source_map(t()) :: Dagger.SourceMap.t()
  def source_map(%__MODULE__{} = function_arg) do
    query_builder =
      function_arg.query_builder |> QB.select("sourceMap")

    %Dagger.SourceMap{
      query_builder: query_builder,
      client: function_arg.client
    }
  end

  @doc "The type of the argument."
  @spec type_def(t()) :: Dagger.TypeDef.t()
  def type_def(%__MODULE__{} = function_arg) do
    query_builder =
      function_arg.query_builder |> QB.select("typeDef")

    %Dagger.TypeDef{
      query_builder: query_builder,
      client: function_arg.client
    }
  end
end